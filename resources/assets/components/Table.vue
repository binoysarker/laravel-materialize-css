<template>
    <div>

        <modal-section></modal-section>
        <h4>Time Line Overview</h4>
        <table class="table responsive-table highlight">
            <thead>
            <tr>
                <th>title</th>
                <th>Creation date</th>
                <th>Number of items</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>Title1</td>
                <td>{{new Date() }}</td>
                <td>3 items</td>
            </tr>
            <tr>
                <td>Title1</td>
                <td>{{new Date() }}</td>
                <td>3 items</td>
            </tr>
            <tr>
                <td><i class="fa fa-circle" style="color: green;"></i> Title1</td>
                <td>{{new Date() }}</td>
                <td>3 items</td>
            </tr>

            </tbody>
        </table>
    </div>
</template>

<script>
    export default {}
</script>

<style scoped>

</style>