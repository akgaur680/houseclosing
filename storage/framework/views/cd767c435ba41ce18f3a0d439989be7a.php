<!DOCTYPE html>
<html>

<head>
    <title><?php echo e(env('APP_NAME')); ?></title>
</head>

<body style="background-color: #EDF2F7;padding: 80px 0;">

    <div style="width: 90%;margin: 0 5%;background-color: #fff;border-radius: 10px;">
        <div style="width: 90%;margin: 0 5%;padding: 10px 0;">
            <p><strong>Name:</strong> <?php echo e($form->name); ?></p>
            <p><strong>Contact:</strong> <?php echo e($form->phone); ?></p>
            <p><strong>Email:</strong> <?php echo e($form->email); ?></p>
            <p><strong>Message:</strong> <?php echo e($form->message); ?></p>
        </div>
    </div>
</body>

</html><?php /**PATH C:\wamp64\www\houseclosing\resources\views\emails\contact.blade.php ENDPATH**/ ?>