Click Here to Reset your Password: <br>
<a href="{{ $link = url('password/reset', $token). '?email='.$user->getEmailForPasswordReset()) }}">{{ $link }}</a>