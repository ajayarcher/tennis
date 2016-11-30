<div class="wrapper">


    <div class="lower-header">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <h1>2. venue</h1>
            </div>

        </div>

    </div>



    <div class="login-form">
        <div class="container-fluid ">
            <div class="form-group">
                <label for="pwd">Select an option</label>
            </div>

            <div class="venue-accord">

                <div class="venue-accord-inner border-top top-radius">
                    <h2 class="top-radius" data-toggle="collapse" data-target="#demo">Pick Your Own Venue</h2>

                    <div class="venue-accord-inner-inset border-set-1 collapse" id="demo">
                        <div class="form-group-inner">
                            <i class="fa fa-search" aria-hidden="true"></i>

                            <input type="search" class="form-control search" id="search" placeholder="Search for a coach">
                        </div>
                    </div>


                </div>



                <div class="venue-accord-inner">
                    <h2 data-toggle="collapse" data-target="#demo1">Suggest A Vanue For Me</h2>

                    <div class="venue-accord-inner-inset white-bg border-bottom collapse" id="demo1">

                        <table cellpading="0" celspacing="0" border="0">

                            <tr>
                                <td width="100">
                                    <div class="checkbox marg-0">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>Venue 1
                                        </label>
                                    </div>
                                </td>
                                <td class="border-right-none">
                                    User's preferred venue

                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <div class="checkbox marg-0">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>Venue 2
                                        </label>
                                    </div>
                                </td>
                                <td class="border-right-none">
                                    Venue close to user's preferred venue 1

                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <div class="checkbox marg-0">
                                        <label>
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>Venue 3
                                        </label>
                                    </div>
                                </td>
                                <td class="border-right-none">
                                    Venue close to user's preferred venue 2

                                </td>

                            </tr>

                        </table>


                    </div>




                </div>


                <div class="venue-accord-inner ">
                    <h2 data-toggle="collapse" class="bottom-radius" data-target="#demo2">Pick A Venue Bassed On Selected Location</h2>


                    <div class="collapse" id="demo2">
                        <div class="venue-accord-inner-inset border-set-1">
                            <div class="form-group-inner">
                                <i class="fa fa-search" aria-hidden="true"></i>

                                <input type="search" class="form-control search" id="serh" placeholder="Enter venue address">
                            </div>
                        </div>

                        <div class="map-with-text">
                            <div class="map-with-text-inner">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d4815229.502726361!2d-5.831484955003637!3d53.892892924075646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sFashion+Street+uk!5e0!3m2!1sen!2sin!4v1480325035283" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


                            </div>

                            <div class="map-with-text-inner marg-top-20 marg-bottom-25">

                                <div class="form-group-venue">

                                    <label>Club Name:</label>

                                    <p>autofill</p>



                                </div>

                                <div class="form-group-venue">

                                    <label>Club Location:</label>

                                    <p>autofill</p>



                                </div>
                                <div class="form-group-venue">

                                    <label>Additional Details:</label>

                                    <p>autofill</p>



                                </div>





                            </div>





                        </div>

                    </div>

                </div>



            </div>


        </div>
    </div>


    <footer>

        <div class="btn-form width-50 marg-top-25 marg-bottom-25">

            <div class="container-fluid ">
                <button type="submit" class="btn btn-default">Back</button>
                <button type="submit" class="btn btn-default">Next</button>

            </div>
        </div>


    </footer>

</div>
<script>
    $(function () {
        $("#search").autocomplete({
            source: "searchVenues",
            minLength: 2,
            select: function (event, ui) {
                console.log("Selected: " + ui.item.value + " aka " + ui.item.id);
            }
        });
    });
</script>