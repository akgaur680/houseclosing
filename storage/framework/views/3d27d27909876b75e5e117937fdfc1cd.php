<!DOCTYPE html>
<html>

<head>
    <title>New Hire Us Form Submission</title>
    <style>
        .main-table {
            margin: 0 auto 0;
            text-align: center;
            border-radius: 4px;
            background-color: #fff;
            padding: 30px;
            width: 100%;
            max-width: 800px;
            border: 1px solid #ccc;
        }

        .child-table1 {
            border-bottom: 1px solid #ccc;
            margin-bottom: 25px;
            width: 100%;
        }

        .child-table2 {
            border-collapse: collapse;
            width: 100%;
            background-color: rgba(var(--bs-gray2-rgb), var(--bs-bg-opacity)) !important;
            color: rgba(var(--bs-gray2-rgb), var(--bs-bg-opacity)) !important;
        }

        .text-color-email a {
            color: rgba(var(--bs-gray2-rgb), var(--bs-bg-opacity)) !important;
        }

        .text-color-email a:hover {
            color: #a22826 !important;
        }

        .style-input {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
            font-size: 16px;
        }

        table {
            width: 100%;
        }

        th {
            padding: 15px;
            font-size: 20px;
            text-transform: uppercase;
            border: 1px solid #ccc;
            border-bottom: none;
            color: #426900;
        }
    </style>
</head>

<body>
    <div>
        <table style="padding: 0">
            <tr>
                <td>
                    <table class="main-table">
                        <tr>
                            <td>
                                <div style="padding: 15px; margin: 0">
                                    <table class="child-table1">
                                        <tr>
                                            <td style="width: 100%; display: table">
                                                <div style="text-align: center; background: rgba(var(--bs-gray2-rgb), var(--bs-bg-opacity)) !important">

                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <table class="child-table2">
                                        <tr style="text-align: center">
                                            <th colspan="2">Hire Us Form - House Closing</th>
                                        </tr>
                                        <tr>
                                            <td class="style-input">Name:</td>
                                            <td class="style-input"><?php echo e(@$form['name']); ?></td>
                                        </tr>

                                        <tr>
                                            <td class="style-input">Email:</td>
                                            <td class="style-input text-color-email">
                                                <?php echo e(@$form['email']); ?>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="style-input">Phone:</td>
                                            <td class="style-input">
                                                <?php echo e(@$form['phone']); ?>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="style-input">Address:</td>
                                            <td class="style-input"><?php echo e(@$form['address']); ?></td>
                                        </tr>

                                        <tr>
                                            <td class="style-input">Message:</td>
                                            <td class="style-input"><?php echo e(@$form['message']); ?></td>
                                        </tr>

                                        <tr>
                                            <td class="style-input">Selected Services:</td>
                                            <td class="style-input">
                                                <?php if(!empty(@$form['selected_service_names'])): ?>
                                                <?php
                                                $services = explode(',', @$form['selected_service_names']);
                                                ?>
                                                <?php $__currentLoopData = @$services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e(@$index + 1); ?>. <?php echo e(trim(@$service)); ?><br>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

</body>

</html><?php /**PATH C:\wamp64\www\houseclosing\resources\views\emails\hireus.blade.php ENDPATH**/ ?>