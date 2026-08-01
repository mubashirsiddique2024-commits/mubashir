<?php

use App\Models\todos;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('renders the update form with the fields needed to save changes', function () {
    $todo = todos::create([
        'name' => 'Existing todo',
        'work' => 'Old work',
        'dueDate' => '2026-07-24',
    ]);

    $this->get('/edit/'.$todo->id)
        ->assertSee('name="name"', false)
        ->assertSee('name="work"', false)
        ->assertSee('name="dueDate"', false);
});

it('redirects to the app home path when the app is served from a subfolder', function () {
    $this->withServerVariables([
        'SCRIPT_NAME' => '/xyz/public/index.php',
        'SCRIPT_FILENAME' => '/xyz/public/index.php',
        'PHP_SELF' => '/xyz/public/index.php',
        'REQUEST_URI' => '/xyz/public/create',
    ])->post('/create', [
        'name' => 'Test todo',
        'work' => 'Write a test',
        'dueDate' => '2026-07-24',
    ])->assertRedirect('/xyz/public/');
});
