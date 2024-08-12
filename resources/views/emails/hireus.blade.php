<!DOCTYPE html>
<html>

<head>
    <title>{{ env('APP_NAME') }}</title>
</head>

<body style="background-color: #EDF2F7;padding: 80px 0;">

    <div style="width: 90%;margin: 0 5%;background-color: #fff;border-radius: 10px;">
    <h3>Hire Us Query</h3>
        <div style="width: 90%;margin: 0 5%;padding: 10px 0;">
            <p><strong>Name:</strong> {{ $form->name }}</p>
            <p><strong>Contact:</strong> {{ $form->phone }}</p>
            <p><strong>Email:</strong> {{ $form->email }}</p>
            <p><strong>Address:</strong> {{ $form->address }}</p>
            <p><strong>Message:</strong> {{ $form->message }}</p>
            <p><strong>Selected Services Names:</strong> {{ $form->selected_service_names }}</p>
        

        </div>
    </div>
</body>

</html>