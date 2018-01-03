<template>
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header"><i class="fa fa-calendar"></i>Time Line</div>
            <div class="collapsible-body collection">
                <a href="" class="collection-item">Table1</a>
                <a href="" class="collection-item">Table2</a>
                <a href="" class="collection-item">Table3</a>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
            <div class="collapsible-body collection">
                <a href="" class="collection-item">Table1</a>
                <a href="" class="collection-item">Table2</a>
                <a href="" class="collection-item">Table3</a>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
            <div class="collapsible-body collection">
                <a href="" class="collection-item">Table1</a>
                <a href="" class="collection-item">Table2</a>
                <a href="" class="collection-item">Table3</a>
            </div>
        </li>
    </ul>
</template>

<script>
    export default {
        mounted () {
            $('.collapsible').collapsible();
        }
    }
</script>

<style scoped>

</style>