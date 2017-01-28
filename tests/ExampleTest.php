<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
              ->seePageIs('/login');        
    }
    public function testProjects()
    {
       $this->visit('/projects')
                ->seePageIs('/login')
                ->type('hayatu2@gmail.com', 'email')
                ->type('tiny700', 'password')
                ->press('login')
                 ->seePageIs('/projects');

        $this->visit('/projects/1')
                 ->seePageIs('/projects/1');       
    }
    public function testFiles()
    {
        $this->visit('/projects/1')
                ->seePageIs('/login')
                ->type('hayatu2@gmail.com', 'email')
                ->type('tiny700', 'password')
                ->press('login')
                 ->seePageIs('/projects/1');       

        $this->visit('/projects/1/files/1')
                 ->seePageIs('/projects/1/files/1');
    }
    public function testAddProject()
    {
        $this->visit('/projects/create')
                ->seePageIs('/login')
                ->type('hayatu2@gmail.com', 'email')
                ->type('tiny700', 'password')
                ->press('login')
                ->seePageIs('/projects/create')
                ->type('Hayatu Estate', 'name')
                ->type('Residential', 'type')
                ->type('Guzape', 'location')
                ->type('Aliyu', 'supervisor')
                ->attach('C:/Users/Hayatu/Pictures/ntel problem', 'picture')
                ->type('20000000', 'budget')
                ->press('submit')
                ->seePageIs('/projects');       
    }
}
