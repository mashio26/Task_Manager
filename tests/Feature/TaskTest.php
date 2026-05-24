<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_task(): void
    {
        $response = $this->post('/tasks', [
            'title' => 'Tache test',
            'description' => 'Ceci est un test de tache',
            'status' => 'todo',
            'due_date' => '2026-05-24',
        ]);

        $response->assertRedirect('/tasks');

        $this->assertDatabaseHas('tasks', [
            'title' => 'Tache test',
        ]);
    }

    public function test_title_is_required(): void
    {
        $response = $this->post('/tasks', [
            'title' => '',
            'description' => 'Ceci est un test de tache',
            'status' => 'todo',
            'due_date' => '2026-05-24',
        ]);

        $response->assertSessionHasErrors('title');
    }

    public function test_can_update_task(): void
    {
        $task = \App\Models\Task::factory()->create();

        $response = $this->put("/tasks/{$task->id}", [
            'title' => 'Tache test modifier',
            'description' => 'Ceci est un test de tache modifier',
            'status' => 'done',
            'due_date' => '2026-06-25',
        ]);

        $response->assertRedirect('/tasks');

        $this->assertDatabaseHas('tasks', [
            'title' => 'Tache test modifier',
            'description' => 'Ceci est un test de tache modifier',
        ]);
    }

    public function test_can_delete_task(): void
    {
        $task = \App\Models\Task::factory()->create();

        $response = $this->delete("/tasks/{$task->id}");

        $response->assertRedirect('/tasks');

        $this->assertDatabaseMissing('tasks', [
            'id' => $task->id,
        ]);
    }
}
