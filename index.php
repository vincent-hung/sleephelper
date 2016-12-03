<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset = "UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content = "width=device-width, initial-scale = 1">
<title>Sleep</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="sleep.css"/>
</head>

<body>

<!--
Why can't I sleep?

Options:

- I consumed something
	What did you consume?
	1. Tea
	2. Coffee
	3. Energy drink
	4. Chocolate

- I slept too much last night
	When did you last sleep? (Calculates when a suitable time to try to fall asleep is)

- I have an irregular sleep schedule

- Worried 

- Insomnia 

- I just can't fall asleep.

-->
<h1>Sleep Helper</h1>

<p>Description</p>
<!--
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation" id="1"><a role="menuitem" tabindex="-1">I consumed something</a></li>
      <li role="presentation" id="2"><a role="menuitem" tabindex="-1">I slept too much</a></li>
      <li role="presentation" id="3"><a role="menuitem" tabindex="-1">I have an irregular sleep schedule</a></li>   
    </ul>
  </div>
-->
<form>
<select id="options">
	<option value="default" selected>Choose an option</option>
    <option value="consume">I consumed something</option>
    <option value="sleptTooMuch">I slept too much</option>
    <option value="irregular">I have an irregular sleep schedule</option>
    <option value="mind">I have something on my mind</option>
    <option value="insomnia">I have insomnia</option>
    <option value="justCant">I just can't fall asleep</option>
  </select>
</form>


<div class="solution" id="consume">
I consumed something
</div>

<div class="solution" id="sleptTooMuch">
I slept too much
</div>

<div class="solution" id="irregular">
Irregular sleep schedule
</div>

<div class="solution" id="mind">
Something on my mind
</div>

<div class="solution" id="insomnia">
Insomnia
</div>

<div class="solution" id="justCant">
JustCant
</div>

</body>

<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
<script src="sleep.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</html>

