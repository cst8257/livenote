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
        Note::create(['title' => 'Meeting Notes', 'text' => 'Discuss project milestones and deadlines.']);
        Note::create(['title' => 'Shopping List', 'text' => 'Buy milk, eggs, bread, and coffee.']);
        Note::create(['title' => 'Workout Plan', 'text' => 'Monday: Cardio, Tuesday: Strength training.']);
        Note::create(['title' => 'Recipe Ideas', 'text' => 'Try making lasagna and chocolate cake.']);
        Note::create(['title' => 'Travel Itinerary', 'text' => 'Visit Paris, Rome, and Barcelona.']);
        Note::create(['title' => 'Book Recommendations', 'text' => 'Read "1984" by George Orwell and "Dune" by Frank Herbert.']);
        Note::create(['title' => 'Event Planning', 'text' => 'Organize the annual company picnic.']);
        Note::create(['title' => 'Learning Goals', 'text' => 'Complete online course on web development.']);
        Note::create(['title' => 'Daily Journal', 'text' => 'Reflect on today’s achievements and challenges.']);
        Note::create(['title' => 'Gift Ideas', 'text' => 'Consider buying a watch or a book for the birthday.']);
    }
}
