<?php

namespace App\Http\Livewire\Appointment;

use App\Models\Appointment;
use App\Models\Client;
use App\Models\Test;
use Livewire\Component;

class Create extends Component
{
    public array $tests = [];

    public Appointment $appointment;

    public array $listsForFields = [];

    public function mount(Appointment $appointment)
    {
        $this->appointment = $appointment;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.appointment.create');
    }

    public function submit()
    {
        $this->validate();

        $this->appointment->save();
        $this->appointment->tests()->sync($this->tests);

        return redirect()->route('admin.appointments.index');
    }

    protected function rules(): array
    {
        return [
            'appointment.client_id' => [
                'integer',
                'exists:clients,id',
                'nullable',
            ],
            'appointment.start_time' => [
                'required',
                'date_format:' . config('project.datetime_format'),
            ],
            'appointment.finish_time' => [
                'nullable',
                'date_format:' . config('project.datetime_format'),
            ],
            'appointment.comments' => [
                'string',
                'nullable',
            ],
            'tests' => [
                'required',
                'array',
            ],
            'tests.*.id' => [
                'integer',
                'exists:tests,id',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['client'] = Client::pluck('name', 'id')->toArray();
        $this->listsForFields['tests']  = Test::pluck('name', 'id')->toArray();
    }
}