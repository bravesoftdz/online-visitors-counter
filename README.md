# online-visitors-counter

1) First we need a MySQL table to store our information

```sql
CREATE TABLE online_visitors(
	session_id CHAR(100) NOT NULL DEFAULT '',
	time INT(11) NOT NULL DEFAULT '0'
);
```

2) We are checking if the session has been already started, if it's not, then start the session

3) We created two variables, one is the current time and the other contains the current time minus n minutes

4) We need to check the session_id is already stored or not, so we query the database and see if it doesn't exist, then we'll store it and if it does exist, we will update the session's time in the DB

5) We get the count of the total session

6) We then check if the session has been in the database for more than 10 minutes, if it is, then we will delete it.

## Installation

### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run

```
php composer.phar require dykyi-roman/online-visitors-counter "dev-master"
```

or add

```
"dykyi-roman/online-visitors-counter": "master"
```

to the require section of your ```composer.json```

## Usage

```php
```

## Author
[Dykyi Roman](https://www.linkedin.com/in/roman-dykyi-43428543/), e-mail: [mr.dukuy@gmail.com](mailto:mr.dukuy@gmail.com)
