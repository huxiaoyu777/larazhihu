<?php

namespace Tests\Feature;

use App\Question;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewQuestionsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function user_can_view_questions()
    {
        $test = $this->get('/questions');

        $test->assertStatus(200);
    }

    /**
     * @test
     */
    public function user_can_view_a_single_question()
    {
        $question = factory(Question::class)->create();

        $test = $this->get('/question/' . $question->id);

        $test->assertStatus(200)
            ->assertSee($question->title)
            ->assertSee($question->content);
    }
}
