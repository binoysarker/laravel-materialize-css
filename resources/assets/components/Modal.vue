<template>
    <div>

        <a class="waves-effect waves-light btn modal-trigger right" href="#modal1">EDIT TIMELINE</a>
        <!-- Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s3"><a class="active" href="#test1">timeline basics</a></li>
                        <li class="tab col s3"><a href="#test2">timeline items</a></li>
                    </ul>
                </div>
                <!--tab content section-->
                <div id="test1" class="col s12">
                    <form class="col s6 offset-l3" method="POST" action="">
                        <legend>
                            <!-- Switch -->
                            <div class="switch right">
                                <label>
                                    Off
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                    On
                                </label>
                            </div>
                        </legend>
                        <div class="row">
                            <div class="input-field">
                                <i class="material-icons prefix">timeline</i>
                                <input id="title" name="title" type="text" class="validate"required>
                                <label for="title" data-error="wrong" data-success="right">Timeline Name</label>

                            </div>
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Header Graphic</span>
                                    <input type="file" >
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" name="graphic" type="text">
                                </div>
                            </div>
                            <div class="input-field">
                                <i class="fa fa-tag"></i>
                                <input id="tag" name="tag" type="text" class="validate"required>
                                <label for="tag" data-error="wrong" data-success="right">Header Tagline Name</label>
                            </div>
                            <div class="input-field">
                                <textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
                                <label for="textarea1">Intro blurb</label>
                            </div>
                            <div class="row card-panel">
                                <h4 class="header lead">SEO Fields</h4>
                                <div class="input-field">
                                    <input id="page_title" name="page_title" type="text" class="validate"required>
                                    <label for="page_title" data-error="wrong" data-success="right">Page Title</label>
                                </div>
                                <div class="input-field">
                                    <input id="page_description" name="page_description" type="text" class="validate"required>
                                    <label for="page_description" data-error="wrong" data-success="right">Page description</label>
                                </div>
                                <div class="input-field">
                                    <input id="keywords" name="keywords" type="text" class="validate"required>
                                    <label for="keywords" data-error="wrong" data-success="right">keywords</label>
                                </div>
                                <div class="input-field">
                                    <input id="Friendly url" name="Friendly url" type="text" class="validate"required>
                                    <label for="Friendly url" data-error="wrong" data-success="right">Friendly url</label>
                                </div>
                                <div class="input-field">
                                    <input id="admin-notes" name="admin-notes" type="text" class="validate"required>
                                    <label for="admin-notes" data-error="wrong" data-success="right">Admin Notes</label>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>
                <div id="test2" class="col s12">Test 2</div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Desagree</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted () {
            $('.modal').modal();
            $('ul.tabs').tabs();
            $('textarea#textarea1').characterCounter();
        }
    }
</script>

<style scoped>

</style>