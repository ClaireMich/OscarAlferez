<?php

return [

	'errors' => [

		'general'                            => 'Something went wrong. Please try again.',
		'general_validation'                 => 'Something went wrong. Please check any required fields and try again.',
		'general_validation_logged'          => 'Something went wrong. Please try again. The error has been logged and will be reviewed.',
		'permission'                         => 'You lack the necessary permission for this action.',
		'student_not_found'                     => 'The a student you were looking for was not found.',
		'students_not_found'                    => 'The a student you were looking for were not found.',
		'student_no_longer_available'           => 'The a student you were looking for is no longer available.',
		'students_no_longer_available'          => 'The a student you were looking for are no longer available.',
		'student_already_exists'                => 'The a student you were attempting to save already exists.',

		'credentials_incorrect'              => 'Your sign-in credentials are incorrect. Please try again.',
		'current_password_incorrect'         => 'Your current password is incorrect. Please try again.',
		'information_required'				 			 => 'Please check all the fields are complete',
		'password_confirmation_required'     => 'Please check that all the fields are complete and that the passwords match.',
		'account_already_activated'          => 'Your account has already been activated.',
		'account_not_activated'              => 'Your account has not yet been activated. Please check your email for an account activation link.',
		'account_not_found'                  => 'The user account you attempted to sign in with was not found. Please register for an account.',
		'email_taken'                  			 => 'This email is already in use. Please check your email and try again',
		'token_user_not_found'               => 'Something went wrong. Please check your email for an account activation link.',


		'passwords'                          => [
			'token' => 'This password reset token is invalid.',
		],

	],

	'success' => [

		'content_updated'             => 'You have successfully updated the content.',

		'created_student'                => 'You have successfully created a student.',
		'added_student'                  => 'You have successfully added a student.',
		'updated_student'                => 'You have successfully updated a student.',
		'uploaded_student'               => 'You have successfully uploaded a student.',
		'activated_student'              => 'You have successfully activated a student.',
		'submitted_student'              => 'You have successfully submitted a student.',
		'deleted_student'                => 'You have successfully deleted a student.',
		'removed_student'                => 'You have successfully removed a student.',
		'declined_student'               => 'You have successfully declined a student.',
		'sent_student'                   => 'You have successfully sent a student.',
		'sent_email'                  => 'You have successfully sent your Email, we will be in contact with you as soon as possible',
		'signed_up_activation_required' => 'You have successfully signed up! Please check your email for the account activation link which will verify your email address.',
		'search_students'                => '<strong>a number</strong> a students found for &ldquo;a terms&rdquo;.',
		'search_students_no_terms'       => '<strong>a number</strong> a students found.',

		'updated_company'             => 'You have successfully updated company details.',
		'logged_in'                   => 'Welcome back to a site, a user!',
		'already_logged_in'           => 'You are already logged in.',
		'logged_in_mobile'            => 'You have successfully logged in.',
		'logged_out'                  => 'You have successfully logged out.',

		'signed_up'                   => 'You have successfully signed up. Please check your email for the account activation link which will verify your email address. You may then sign in.',
		'account_activated'           => 'You have successfully activated your account!',

		'debug_enabled'               => 'Debug Mode is enabled.',
		'user_verified'               => 'You have successfully verified this user.',

		'passwords'                   => [
			'reset' => 'Your password has been reset!',
		],

	],

	'info' => [

		'password_expired' => 'Your password is expired. Please change your password.',

	],

	'notifications' => [],

	'no_files_of_kind' => 'There are currently no files of this kind.',

	'confirmation' => [
		'delete_student' => 'Are you sure you would like to delete this a student?',
	],

];