<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <h1>Start listing!</h1>
        <form ng-submit="addTodos()">        	
	        <input ng-model="myinput" type="text" name="todo" placeholder="Type your priorities" class="form-control input-lg">
        </form>             
    </div>
    <div class="col-lg-8 col-lg-offset-2">
    <br />
		<uib-tabset type="pills">
		    <uib-tab heading="Active Tasks">
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
		    </uib-tab>
		    <uib-tab heading="Show all Tasks">
		    	<h3>All tasks</h3>
		    	<div class="col-lg-offset-1">
			    	<ul ng-repeat="list in allTodos" style="list-style-type: none;">
			    		<li>
				    		<div class="row">
				    			<div class="col-md-4">
				    				<input type="checkbox" name="check" ng-model="list.IsDone" ng-click="done(list)" ng-show="!list.IsDone"> 
				    				<span ng-class="{'task-crossout': list.IsDone}"> {{list.TodoName}} </span>
				    			</div>
			    			</div>
			    		</li>
			    	</ul>
		    	</div>
		    </uib-tab>
		    
		</uib-tabset>

    	
    </div>
</div>
