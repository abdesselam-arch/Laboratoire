<?php

namespace App\Http\Livewire\Test;

use App\Models\Test;
use Livewire\Component;

class Create extends Component
{
    public Test $test;

    public function mount(Test $test)
    {
        $this->test = $test;
    }

    public function render()
    {
        return view('livewire.test.create');
    }

    public function submit()
    {
        $this->validate();

        $this->test->save();

        return redirect()->route('admin.tests.index');
    }

    protected function rules(): array
    {
        return [
            'test.name' => [
                'string',
                'required',
                'unique:tests,name',
            ],
            'test.type' => [
                'string',
                'required',
            ],
            'test.price' => [
                'numeric',
                'required',
            ],
        ];
    }
}