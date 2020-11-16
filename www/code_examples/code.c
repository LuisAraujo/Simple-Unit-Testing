#include<stdio.h>
#include<stdlib.h>

main(){
	
	int contador, x, y;
	scanf("%d", &x);
	scanf("%d", &y);
	
	for (contador=x; contador<=y; contador++)	
	{
		if (contador % 7 == 0)
			printf("%d,", contador);
	}

} 