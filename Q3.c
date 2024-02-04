#include<stdio.h>
#include<stdbool.h>

void main(){
	
	while(true){
		int num_counters,i,income=0,salary=0;
		int num_emp,p_count=0,l_count=0;
		
		printf("Enter the number of counters: ");
		scanf("%d",&num_counters);
		
		for(i=0;i<num_counters;i++){
			int temp = 0;
			printf("\tEnter the income of counter %d: ",i+1);
			scanf("%d",&temp);
			
			income += temp;
		}
		
		printf("\nEnter the number of employees: ");
		scanf("%d",&num_emp);
		
		for(i=0;i<num_emp;i++){
			int temp = 0;
			printf("\tEnter the income of counter %d: ",i+1);
			scanf("%d",&temp);
			
			salary += temp;
		}
		
		printf("\nTotal Income: %d\n",income);
		printf("Total salary: %d\n",salary);
		
		int profit = income-salary;
		printf("Profit: %d\n",profit);
		
		if(profit>0){
			printf("Status: Profit");
			p_count++;
		} else {
			printf("Status: Loss\n\n");
			l_count++;
		}
		
		char temp;
		printf("Any other exchange points (y/n): ");
		scanf(" %c",temp);
			
		if(temp == 'y'){
			continue;
		} else {
			if(p_count>l_count){
				printf("\nGood economy");
			} else if(l_count>p_count){
				printf("\nBad economy");
			} else {
				printf("\nAverage economy");
			}
			break;
		}
	}
	
}
