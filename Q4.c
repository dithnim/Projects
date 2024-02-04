#include<stdio.h>

void main(){
	char cars[5][20] = {"Audi","Benz","Ford","Roys","Niro"};
	int speed[5],i,j=1,tot=0;
	
	
	for(i=0;i<5;i++){
		printf("Enter the speed of %s car (km/h): ",cars[i]);
		scanf("%d",&speed[i]);
		tot += speed[i];
	}
	
	int avg = tot/5;
	
	printf("\nAverage Speed of all cars: %d km/h\n\n",avg);
	
	printf("Top Speed Cars (Above average)\n");
	printf("------------------------------\n");
	
	for(i=0;i<5;i++){
		if(speed[i]>avg){
			printf("%d. %s\t\t%dkm/h\n",j,cars[i],speed[i]);
			j++;
		}
	}
	
	j=1;
	
	printf("\nLess Speed Cars (Below average)\n");
	printf("-------------------------------\n");
	
	for(i=0;i<5;i++){
		if(speed[i]<avg){
			printf("%d. %s\t\t%dkm/h\n",j,cars[i],speed[i]);
			j++;
		}
	}
}
