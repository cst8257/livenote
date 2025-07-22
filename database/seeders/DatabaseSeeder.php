<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Note;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory(4)->create();

        Note::create(['title' => 'Meeting Notes', 'text' => 'Discuss project milestones and deadlines.', 'user_id' => 1]);
        Note::create(['title' => 'Shopping List', 'text' => 'Buy milk, eggs, bread, and coffee.', 'user_id' => 1]);
        Note::create(['title' => 'Workout Plan', 'text' => 'Monday: Cardio, Tuesday: Strength training.', 'user_id' => 1]);
        Note::create(['title' => 'Recipe Ideas', 'text' => 'Try making lasagna and chocolate cake.', 'user_id' => 2]);
        Note::create(['title' => 'Travel Itinerary', 'text' => 'Visit Paris, Rome, and Barcelona.', 'user_id' => 2]);
        Note::create(['title' => 'Book Recommendations', 'text' => 'Read "1984" by George Orwell and "Dune" by Frank Herbert.', 'user_id' => 3]);
        Note::create(['title' => 'Event Planning', 'text' => 'Organize the annual company picnic.', 'user_id' => 4]);
        Note::create(['title' => 'Learning Goals', 'text' => 'Complete online course on web development.', 'user_id' => 4]);
        Note::create(['title' => 'Daily Journal', 'text' => 'Reflect on today’s achievements and challenges.', 'user_id' => 5]);
        Note::create(['title' => 'Gift Ideas', 'text' => 'Consider buying a watch or a book for the birthday.', 'user_id' => 5]);
    }
}
