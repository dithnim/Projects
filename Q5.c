#include<stdio.h>
#include<stdbool.h>

int find_tax(int ammount){
	int tax_ammount;
	
	if(ammount<=100000){
		tax_ammount = (ammount*5)/100;
	} else if(ammount <= 150000){
		tax_ammount = (ammount*8)/100;
	} else {
		tax_ammount = (ammount*10)/100;
	}
	
	return tax_ammount;
}

bool valid(int num){
	if(num<0){
		return false;
	} else if(num%1000 != 0){
		return false;
	} else {
		return true;
	}
}

void main(){
	int income,tax,tot;
	
	while(true){
			printf("Enter the fathers income: ");
			scanf("%d",&income);
			
			if(valid(income)){
				tax = find_tax(income);
				tot+= tax;
				break;
			} else {
				printf("Invalid ammount\n");
				continue;
			}
		}
		
		printf("\nTax paid by father: %d\n\n",tax);
		
		while(true){
			printf("Enter the mothers income: ");
			scanf("%d",&income);
			
			if(valid(income)){
				tax = find_tax(income);
				tot+= tax;
				break;
			} else {
				printf("Invalid ammount\n");
				continue;
			}
		}
		
		printf("\nTax paid by mother: %d\n",tax);
		
		printf("\nTotal tax paid by the familly: %d",tot);	
	
}
