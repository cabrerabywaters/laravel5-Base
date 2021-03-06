<div ng-show="collapsed&&!loading " class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>CREAR NUEVA EMPRESA</h4>

            <form class="form-horizontal style-form" method="get">


                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">RUT</label>

                    <div class="col-sm-10 col-lg-6">
                        <input type="text" class="form-control" ng-model="companyData
                        .rut">
                        <span class="bg-danger text-danger pull-right" ng-repeat="error in errors.rut">@{{ error
                        }}</span>
                    </div>


                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">RAZÓN SOCIAL</label>

                    <div class="col-sm-10 col-lg-6">
                        <input type="text" class="form-control" ng-model="companyData.description">
                        <span class="bg-danger text-danger pull-right" ng-repeat="error in errors.description">@{{ error
                        }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">NOMBRE DE FANTASÍA</label>

                    <div class="col-sm-10 col-lg-6">
                        <input type="text" class="form-control" ng-model="companyData.fancy_name">
                        <span class="bg-danger text-danger pull-right" ng-repeat="error in errors.fancy_name">@{{ error
                        }}</span>
                        <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">DIRECCIÓN</label>

                    <div class="col-sm-10 col-lg-6">
                        <input type="text" ng-model="companyData.address" placeholder="Comience a escribir..."
                               typeahead="address for address in getLocation($viewValue)"
                               typeahead-loading="loadingLocations" class="form-control">
                        <i ng-show="loadingLocations" class="glyphicon glyphicon-refresh"></i>
                        <span class="bg-danger text-danger pull-right" ng-repeat="error in errors.address">@{{ error
                        }}</span>
                        <span class="help-block">Dirección con número: Ej. "Libertador Bernardo O´Higgins 8878"</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">TELÉFONO</label>

                    <div class="col-sm-10 col-lg-6">
                        <input type="text" class="form-control" ng-model="companyData.phone_number">
                        <span class="bg-danger text-danger pull-right" ng-repeat="error in errors.phone_number">@{{
                        error
                        }}</span>
                        <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">IMÁGEN</label>

                    <div class="col-sm-10 col-lg-6">
                        <div class="container-fluid">
                            <div>Select an image file: <input type="file" id="fileInput" /></div>
                            <div class="container-fluid" style="background: #E4E4E4 ;  overflow: hidden;  width:300px;
                height:150px;">
                                <img-crop image="myImage" result-image="myCroppedImage"></img-crop>
                            </div>
                            <div>Así se verá la Imagen:</div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-md-offset-3 col-lg-offset-3"><img
                                        ng-src="@{{myCroppedImage}}"
                                                                                 id="img" /></div>

                        </div>
                        <span class="bg-danger text-danger pull-right" ng-repeat="error in errors.img">@{{
                        error
                        }}</span>

                    </div>
                </div>





                <button ng-click="submitCompany()" type="button" class="btn btn-success">Success</button>

            </form>
        </div>
    </div>
    <!-- col-lg-12-->
</div>