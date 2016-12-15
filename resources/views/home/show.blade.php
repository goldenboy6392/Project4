@extends('layouts.master')

@section('title')
    Homepage
@stop

@section('content')
	<h2 class='title'>Project 4</h2>
	<h4 style='text-decoration: underline;'>Over-The-Counter and Prescription Medications</h4>
		<blockquote>
			This website is a reference guide that allows patients to look-up information concerning different medications. Featuring in-depth information on over 250 medications, this tool will help patients expand their knowledge on the medications they are taking.
		</blockquote>
		<h3>Search Form</h3>
		<div class="form-group">
		<form method ='POST' action="/medications">
			{{ csrf_field() }}
			<input maxlength='35' size="35" class="text" type="text" name="search" id="search" placeholder="Search by generic/brand name or NDC">
			<br>
			<br>
			<label>Medication Type: </label>
			<select name='Medication_Type'>
			<option value='both'>Both</option>
			<option value="otc">OTC</option>
			<option value='prescription'>Prescription</option>
			</select>
			<br>
			<br>
			<input type='submit' name='submit' class='btn btn-default' value='Go ->'>
		</form></div>
@stop