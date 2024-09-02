<?php

namespace Tests\Architecture;

use PHPat\Selector\Selector;
use PHPat\Test\Builder\Rule;
use PHPat\Test\PHPat;

final class Structure
{
    public function test_model_does_not_depend_on_other_layers(): Rule
    {
        return PHPat::rule()
            ->classes(Selector::inNamespace('App\Models'))
            ->shouldNotDependOn()
            ->classes(
                Selector::inNamespace('App\Providers'),
                Selector::inNamespace('App\Console'),
                Selector::classname('/^SomeVendor\\\.*\\\ForbiddenSubfolder\\\.*/', true)
            )
            ->because('this will break our architecture, implement it another way! see /docs/howto.md');
    }
}
