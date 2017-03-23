pointsToCompare = [[1,3,5],[1,3,5]]

function overlaps(){
	for(index = 0; index<pointsToCompare.length; index++ )
		for(index2 = index+1; index2<pointsToCompare.length; index2++)
			if(pointsToCompare[index][0]==pointsToCompare[index2][0]){
                var startsAfter = pointsToCompare[index][1]>=pointsToCompare[index2][2];
                var endsBefore = pointsToCompare[index][2]<=pointsToCompare[index2][1];
                var overlap = !( startsAfter || endsBefore );
				if(overlap)
					return true;
			}
    
    return false;
}


// place day x , top and top+ height in the array .