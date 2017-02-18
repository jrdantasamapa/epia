@foreach($emails as $email)
	BEGIN:VCARD<br>
	VERSION:3.0<br>
	FN:<br>
	N:;;;;<br>
	ORG:;<br>
	EMAIL;type=INTERNET;type=HOME;type=pref:{{ $email->email}}<br>
	END:VCARD<br>
@endforeach