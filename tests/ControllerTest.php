<?php
use App\Repositories\UserRepository;
class ExampleTest extends TestCase
{
    /** @var UserRepository|Mockery\MockInterface */
    protected $mockedUserRepo;
    public function setUp()
    {
        parent::setup();
        $this->mockedUserRepo = Mockery::mock(UserRepository::class);
        app()->instance(UserRepository::class, $this->mockedUserRepo);
    }
    public function testUserRepositoryIsCalledToGetAllUsers()
    {
        $this->mockedUserRepo
            ->shouldReceive('all')
            ->withNoArgs()
            ->andReturnNull();
        $this->get('/api/users');
        // $this->assertEmpty($this->response->getContent());
    }
}
