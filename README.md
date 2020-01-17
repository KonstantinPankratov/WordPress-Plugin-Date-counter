## About
Date counter - is just a 3 kilobytes WordPress plugin that allows you to add a shortcode to count difference between two dates using start and end dates or display the current date easily.


## Installation

1. Upload the plugin files to the `/wp-content/plugins/date-counter` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Place shortcode **[DateCounter startDate="date" endDate="date" format="outputFormat"]**.

## Options

###### Format options

- **currentYear** - displays the current Year
- **currentMonth** - displays the current Month
- **currentDay** - displays the current Day

Don't need anymore to change copyright year in footer each year!

```
    INPUT:  Copyright © [DateCounter format="currentYear"].
    OUTPUT: Copyright © 2020.`
```

- **Years**   - displays the difference in Years
- **Months**  - displays the difference in Months
- **Days**    - displays the difference in Days
- **Hours**   - displays the difference in Hours
- **Minutes** - displays the difference in Minutes
- **Seconds** - displays the difference in Seconds

```
    INPUT:  I'm [DateCounter startDate="1998-08-25" endDate="now" format="Years"] years old!
    OUTPUT: I'm 21 years old!
```

- [Custom output format](https://www.php.net/manual/ru/dateinterval.format.php)

```
    INPUT:  It's been [DateCounter startDate="2019-08-31" endDate="2019-09-15" format="%a"] days since the end of summer :(
    OUTPUT: It's been 15 days since the end of summer :(
```

###### startDate and endDate options

- **Any date format:** 01.01.1991, 01-01-1991, 1991.01.01, 1991-01-01
- **Now** - gets current date and time

## Author
[Konstantin Pankratov](http://kopa.pw/)