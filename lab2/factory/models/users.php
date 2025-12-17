<?php
namespace Factory\Models;

class Users extends Collection
{
    public function __construct(public ?array $users = null)
    {
        $users ??= [
            new User(
                 'dmitry.koterov@gmail.com',
                 'password1',
                 'Дмитрий',
                 'Котеров'),
            new User(
                 'igorsimdyanov@gmail.com',
                 'password2',
                 'Игорь',
                 'Симдянов'),
            new User(
                 'ivanov@sample.sample',
                 'password3',
                 'Иван',
                 'Иванов'),
            new User(
                 'petrov@sample.sample',
                 'password4',
                 'Алексей',
                 'Петров'),
            new User(
                 'stepin@sample.sample',
                 'password5',
                 'Кирилл',
                 'Стёпин'),
            new User(
                 'egorov@sample.sample',
                 'password6',
                 'Роман',
                 'Егоров')
        ];
        parent::__construct($users);
    }
}