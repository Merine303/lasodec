<?php

namespace App\Orchid\Layouts\ExpertProfile;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;

class ExpertWorkExperience extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [
            Input::make('expert.company')
                ->title('Company'),

            Input::make('expert.work_duration')
                ->title('Work duration'),
        ];
    }
}
