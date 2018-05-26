## About

Date counter is a WordPress plugin that allows you to add a shortcode to count difference between two dates using start and end dates or display the current date easily.

## Usage
1. Place date-counter folder to the wp-content/plugins/

2. Include shortcode **[DateCounter startDate="date" endDate="date" format="outputFormat"]**

###### Example 1:

- format="currentYear"
- format="currentMonth"
- format="currentDay"

```
    INPUT:  It's [DateCounter format="currentYear"] now!
    OUTPUT: It's 2018 now!
```

###### Example 2:

```
    INPUT:  I'm [DateCounter startDate="1998-08-25" endDate="now" format="Years"] years old!
    OUTPUT: I'm 19 years old!
```

###### Example 3:

- format="Years"
- format="Months"
- format="Days"

```
    INPUT:  It's been [DateCounter startDate="2017-12-31" endDate="now" format="Days"] days since New year!
    OUTPUT: It's been 146 days since New year! 
```

## Author
[Konstantin Pankratov](http://kopa.pw/)