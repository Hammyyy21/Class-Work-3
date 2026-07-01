# CW 03 Forms and PHP

## Project Description

This project is a PHP form handling assignment for practicing HTML forms, PHP processing, server-side validation, multi-select input handling, and flat-file storage.

The theme of the assignment is a joke "Buy a Grade" form. The user fills out a form, submits it to a PHP file, and the PHP script validates the input, displays the submitted values, and saves valid records to a server file.

## Files Used

* `buyagrade.html`
  Creates the HTML form and collects user input.

* `sucker.php`
  Processes the form submission using `$_POST`, validates required fields, displays submitted values, and saves valid records.

* `suckers.html`
  Stores submitted records using flat-file storage.

## Features

* HTML form with name, section, credit card number, card type, and optional features.
* PHP form processing using the POST method.
* Server-side validation for required fields.
* Multi-select input handling using `options[]`.
* Safe output using `htmlspecialchars()`.
* Record saving using `file_put_contents()` with `FILE_APPEND`.
* Displays raw submitted data for debugging.
* Shows saved records from `suckers.html`.

## How It Works

1. The user opens `buyagrade.html`.
2. The form submits data to `sucker.php`.
3. `sucker.php` checks that required fields are not blank.
4. If the form is incomplete, an error message is shown.
5. If the form is complete, the data is displayed and saved to `suckers.html`.
6. Saved records can be viewed from the output page or directly in `suckers.html`.

## CODD Deployment

Live project URL:

```text
https://codd.cs.gsu.edu/~heldeib1/cw3/buyagrade.html
```

## Testing

The project was tested with:

* A valid form submission.
* A blank required field.
* Multiple selected options from the optional features list.
* Checking that saved records append correctly to `suckers.html`.

## What I Learned

Through this assignment, I learned how HTML form fields connect to PHP using `$_POST`. I also learned how field names affect PHP processing, why `options[]` is needed for multi-select inputs, how to validate form data before saving it, and how to append records to a server file.
