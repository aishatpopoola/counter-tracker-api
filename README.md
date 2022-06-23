# COUNTER-API

This projects serves as the API endpoint for a counter project. The project serves saves a all the counts per day.


## Live URL
[Endpoint Url]()


## Tables

- `DayCount` table which holds counts data. It has the following fields with timestamps
  - `day`: day of count
  - `count`: total counts made in a day
  - `status`: to show if the count can still be stored for a particular day

## Features

- Get a list of counts.
- Add counts

## Documentation

### Get all day counts

`/count/get-all-counts` This uses a `GET` method to get all the list of day_counts from the database

Method: `GET`
- Response:
```bash
{
    "counts": [
        {
            "id": 1,
            "day": "2022-06-18 00:00:00",
            "count": 3188,
            "status": false,
            "created_at": "2022-06-18 15:45:04",
            "updated_at": "2022-06-18 15:45:54"
        },
        {
            "id": 2,
            "day": "2022-06-19 00:00:00",
            "count": 3183,
            "status": false,
            "created_at": "2022-06-19 15:45:04",
            "updated_at": "2022-06-19 15:45:54"
        },
        {
            "id": 3,
            "day": "2022-06-20 00:00:00",
            "count": 3335,
            "status": false,
            "created_at": "2022-06-20 15:45:04",
            "updated_at": "2022-06-20 15:45:54"
        },
        {
            "id": 4,
            "day": "2022-06-21 00:00:00",
            "count": 3188,
            "status": false,
            "created_at": "2022-06-21 15:45:04",
            "updated_at": "2022-06-22 14:01:45"
        },
        {
            "id": 5,
            "day": "2022-06-22 00:00:00",
            "count": 8,
            "status": true,
            "created_at": "2022-06-22 14:01:55",
            "updated_at": "2022-06-22 14:01:55"
        }
    ]
}
```
   
###  Add a day_count into the database.
`/count/add-count` This uses a `POST` method add counts for the current day to the database

Method: `POST`
Request Payload: The payload only need a `counter` field which is required and should be greater than 0
```bash
{ "counter": 34 }

``` 

Response:
```bash
{
    "count": {
        "id": 5,
        "day": "2022-06-22 00:00:00",
        "count": 47,
        "status": true,
        "created_at": "2022-06-22 14:01:55",
        "updated_at": "2022-06-22 17:53:59"
    },
    "is_first_time_counting_today": 0
}    
```


## Setup the project locally (Running locally)

- Clone the project

```bash
git clone 

```

- Install composer Dependencies

```bash
composer install
```

- Migrate tables to database with seeder

```bash
php artisan migrate:fresh --seed
```

- Run tests
```bash
vendor/bin/phpunit
```
