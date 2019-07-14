<div class="row">
   <div class="col-lg-8 col-lg-offset-2">

      <h1>Give us News!</h1>
      <form ><!-- ng-submit="newsContent()"> -->
         <input ng-model="newsTitle" type="text" name="title" placeholder="Give us a title for the news" class="form-control input-lg">
         <textarea ng-model="newsContent" type="text" name="content" placeholder="Type the news content" class="form-control input-lg"></textarea>
         <select name="topics" ng-model="newsTopicsList" class="form-control input-lg" ng-options="topic.TopicName for topic in allTopics track by topic.id" multiple>
         </select>
         <input type="button" class="btn btn-primary" ng-click="addNews()" value="Publish!" />

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