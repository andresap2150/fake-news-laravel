<div class="row">
   <div class="col-lg-8 col-lg-offset-2">
      <h1>Give us News!</h1>
      <form ><!-- ng-submit="newsContent()"> -->
         <input ng-model="newsTitle" type="text" name="title" placeholder="Give us a title for the news" class="form-control input-lg">
         <textarea ng-model="newsContent" type="text" name="content" placeholder="Type the news content" class="form-control input-lg"></textarea>
         <input type="button" ng-click="addNews()" value="Publish!" />
      </form>
   </div>
   <div class="col-lg-8 col-lg-offset-2">
      <uib-tabset type="pills">
         <!-- <uib-tab heading="Active Tasks">
            <h3>Your active tasks</h3>
            <div class="row text-center" ng-hide="anyActiveTodos">
               <div class="col-md-12">
                  <img src="../content/images/Status_-_Active.png" height="250">
               </div>
               <div class="col-md-12">
                  <h3>No tasks for today</h3>
                  <h4>Have a good day!</h4>
               </div>
            </div>
            <div class="col-lg-offset-1" ng-show="anyActiveTodos">
               <ul ng-repeat="list in lists" style="list-style-type: none;">
                  <li>
                     <div class="row">
                        <div class="col-md-4">
                           <input type="checkbox" name="check" ng-model="list.IsDone" ng-click="done(list)">
                           <span ng-class="{'task-crossout': list.IsDone}"> {{list.TodoName}} </span>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </uib-tab>
         <uib-tab heading="Completed Tasks">
            <h3>Your completed tasks</h3>
            <div class="col-lg-offset-1">
               <ul ng-repeat="list in completedTodos" style="list-style-type: none;">
                  <li>
                     <div class="row">
                        <div class="col-md-4">
                           <span ng-class="{'task-crossout': list.IsDone}"> {{list.TodoName}} </span>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </uib-tab> -->
         <uib-tab heading="Show all Tasks">
            <h3>All News</h3>
            <div class="col-lg-offset-1">
               <ul ng-repeat="list in allNews" style="list-style-type: none;">
                  <li>
                     <div class="row">
                        <div class="col-md-4">
                           <!-- <input type="checkbox" name="check" ng-model="list.IsDone" ng-click="done(list)" ng-show="!list.IsDone"> -->
                           <span ng-class="{'task-crossout': list.IsDone}"> {{list.title}} </span>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </uib-tab>
      </uib-tabset>
   </div>
</div>