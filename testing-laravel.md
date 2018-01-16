# Testing Laravel


# Sources
### Full stack Radio 72: Taylor Otwell - Testing Laravel Applications
[Listen here - twice becasue its nice](http://www.fullstackradio.com/72)

### Laracasts
[Watch - testing jargon](https://laracasts.com/series/testing-jargon)

[Watch - testing laravel](https://laracasts.com/series/phpunit-testing-in-laravel)

### PHPUnit

Baked in just use like this
```
./vendor/bin/phpunit
```

### PHPSpec

Allows you to drive out the implimentation while testing

# Unit testing

- Simple fast way to test a peice of funcationality, given this INPUT does it 
match the desired OUTPUT,
- low level testing,
- dont touch database,
- dont query an API,
- or referenace any colaborators,
- Keep it as close to documentation as possible


[SHOW EXAMPLE]


# Mocks
Create objects that simulates the bahaviour of real objects in your code i.e 


# Stubs
The stub impliments just enough behaviour to allow the object under test to execute the test.

# Dummies

# Factories


In Laravel 5.4+ front end user testing is done with DUSK

Zoomed in
given this input, this is the expected output

Zoomed out
Entering the application like user would, making test for layer of the app

Directory structures
/Tests
	/Unit  for unit tests
	/Acceptance for acceptance testing.
	/Browser ( Dusk)
	/
depends on the team though what we decide to do init bro.

Note: So there browser tests use DUSK for that. If doing unit tests use PHPUnit


### Create the test first

- write the minimum amount of code to make the test pass... then think about refactor and begin constructing your class to make the test pass.
- Create your mock object or data and assert againt it

### Extract methods
- make protected method for re-usable code

### write test
- make a model and or class
- test again, build out the code iteratively  

### Structure of unit test
Think about these notions when building a test.
// Given
// When 
// Then

Keep it as close to documentation as possible

# my test repos

[Laravel testing - github](https://github.com/mannuelf/laravel-testing-101)

[Vue testing](https://github.com/mannuelf/vuejstesting)



# Vue Js testing

https://github.com/mjackson/expect

```
	"expect": "^21.2.1",
    "jsdom": "^11.5.1",
    "jsdom-global": "^3.0.2",
    "mocha": "^4.0.1",
    "mocha-webpack": "^1.0.1",
    "vue-loader": "^13.5.0",
    "vue-template-compiler": "^2.5.10",
    "vue-test-utils": "^1.0.0-beta.7",
    "vuejs": "^2.0.18",
    "webpack": "^3.10.0"
```