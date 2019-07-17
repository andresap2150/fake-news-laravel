<div class="row">
   <div class="col-lg-8 col-lg-offset-2">

      <h1>Give us News!</h1>
      <form name="anotherNews" novalidate>
         <div ng-class="{ 'has-error' : anotherNews.title.$invalid && anotherNews.title.$dirty }">
            <input ng-model="newsTitle" type="text" name="title" placeholder="Give us a title for the news" class="form-control input-lg " required />         
            <p ng-show="anotherNews.title.$dirty && anotherNews.title.$invalid" class="help-block">news title is required</p>
         </div>
         <div ng-class="{ 'has-error' : anotherNews.content.$invalid && anotherNews.content.$dirty}">
            <textarea ng-model="newsContent" type="text" name="content" placeholder="Type the news content" class="form-control input-lg" required></textarea>
            <p ng-show="anotherNews.content.$dirty && anotherNews.content.$invalid" class="help-block">all we need is content</p>
         </div>
         <div ng-class="{ 'has-error : anotherNews.topics.$invalid && anotherNews.topics.$dirty'}">
            <select name="topics" ng-model="newsTopicsList" class="form-control input-lg" ng-options="topic.TopicName for topic in allTopics track by topic.id" multiple required>
            </select>
            <p ng-show="anotherNews.topics.$dirty && anotherNews.topics.$invalid" class="help-block">topics for users notification</p>
         </div>
         <input type="button" class="btn btn-primary" ng-disabled="anotherNews.$invalid" ng-click="addNews()" value="Publish!" />
      </form>
   </div>
   <div class="col-lg-8 col-lg-offset-2">
      <h3>All News</h3>
      <div class="col-lg-offset-1">
         <ul ng-repeat="list in allNews" style="list-style-type: none;">
            <li>
               <div class="row">
                  <div class="col-md-4">
                     <span ng-class="{'task-crossout': list.IsDone}"> {{list.title}} </span>
                    </div>
               </div>
            </li>
         </ul>
      </div>
   </div>
</div>