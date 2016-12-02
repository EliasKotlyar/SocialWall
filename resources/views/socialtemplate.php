<div class="aping-design-default aping-design-default-social">
    <strong>Advanced Demo Social Wall</strong>
    <br><br>
    <div ng-controller="apingDefaultDesignController">
        <div data-images-loaded masonry class="row" preserve-order reload-on-show ng-show="results">
            <div class="masonry-brick col-lg-4 col-sm-6 col-xs-12" ng-repeat="item in results" ng-cloak>
                <div class="box">
                    <div class="box-header" ng-if="item.img_url">
                        <a ng-href="{{::item.post_url}}" target="_blank" class="aping-picture-link"><img ng-src="{{::item.img_url}}" class="main-image img-responsive" alt=""></a>
                    </div>
                    <div class="box-content">
                        <h4 class="" ng-if="item.caption">{{::item.caption}}</h4>

                        <div class="" ng-if="item.text" linkify>
                            {{::item.text | limitTo: 250}}{{::item.text.length > 250 ? '...' : ''}}
                        </div>

                        <div class="clearfix">
                            <br>
                        </div>

                        <div class="box-footer text-muted">
                            <div class="pull-left text-left">
                                <div ng-if="item.blog_name">
                                    <a href="{{::item.blog_link}}" target="_blank">{{::item.blog_name}}</a>
                                </div>
                                <div am-time-ago="{{::item.timestamp}}"></div>
                            </div>
                            <div class="pull-right">
                                <a ng-href="{{::item.post_url}}" target="_blank" class="platform-link">
                                    ({{::item.platform}})
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>