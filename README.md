# Circle Link Health Dev Exercise

This repository houses code for [Circle Link Health Dev Exercise](https://github.com/mykoman/Circle-Link-Health-Dev-Exercise.git).


## About the Project

This task is to build a Laravel application which will be used by nurses to input their patients’ blood pressure readings. 

The application should have below features
A page for creating patients
A page to record blood pressure readings for patients
Export a CSV of all patients. Part of an online assessment for [Circle Health Link](https://circlelinkhealth.com/). It allows nurses to:

- Create patients.
- Record blood pressure readings for patients
- Export a CSV of all patients



## Getting Started

### Dependencies

- This project uses [Laravel](https://laravel.com/) v8.
Laravel can be installed in different ways which include using composer. Kindly check the website for the one that suits you. I will be using composer here however.
- [Tailwind](https://tailwindcss.com/) for styling 


### Getting the Source

You can clone this project directly using this command:

```sh
git clone https://github.com/mykoman/Circle-Link-Health-Dev-Exercise.git
```

### Installation & Usage

<!-- - Create a PostgreSQL database by running the `cmd` below:

```sh
createdb -h localhost -p 5432 -U postgres <database_name>
``` -->

- After cloning the repository, create a `.env` file from `.env.example` and set your local `.env.` variable(s).

```sh
cp .env.example .env
```
- Install the dependencies

```sh
npm install
```

```sh
npm run dev
```

- Run migration

```sh
php artisan migrate --seed
```
- You can run the server using

```sh
php artisan serve 
```



## How to Login

After starting the server. The url will be displayed on the terminal. Visit the base URL. You will be prompted to login. Use the following credentials


```sh
email: mail1@gmail.com 
```

```sh
password: HelloPass! 
```


## How to Get Help

Notice a bug? Please open an issue. Need more clarification on any part of the code base? Contact [Michael Ogbuma](https://github.com/mykoman).


## Author

- **[Michael Ogbuma](https://github.com/mykoman)** 