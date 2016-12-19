<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<style>
    .inv {
        display: none;
    }
</style>
<body>
<select id="target">
    <option value="">Select...</option>
    <option value="content_1">Option 1</option>
    <option value="content_2">Option 2</option>
    <option value="content_3">Option 3</option>
    <select>

        <div id="content_1" class="inv">Content 1</div>
        <div id="content_2" class="inv">Content 2</div>
        <div id="content_3" class="inv">Content 3</div>

        <script>
            document
                .getElementById('target')
                .addEventListener('change', function () {
                    'use strict';
                    var vis = document.querySelector('.vis'),
                        target = document.getElementById(this.value);
                    if (vis !== null) {
                        vis.className = 'inv';
                    }
                    if (target !== null ) {
                        target.className = 'vis';
                    }
                });
        </script>
</body>
</html>