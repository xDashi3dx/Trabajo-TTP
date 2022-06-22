/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package suma.de.matriz;

/**
 *
 * @author RICARDO
 */
public class SumaDeMatriz {
    
    public static void main(String[] args) {
        int x,y ;
        int B[][] = {{1,0,1},{1,1,1},{0,1,0}};
        int A[][] = {{0,0,0},{0,0,0},{0,0,0}};
        int C[][] = new int [3][3];
        for(x=0;x<3;x++){
            for(y=0;y<3;y++)
                C[x][y]=A[x][y]+B[x][y];
        }   
        for(x=0;x<3;x++){
            for(y=0;y<3;y++)
                System.out.print(C[x][y]+"\n");
            
         
                
        
        }
        
        
        
        
    
}
        
    

    
}
