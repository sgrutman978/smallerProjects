package addstuff;


import java.util.*;

public class sudokuNew {
   
    public static void main(String[] args) {
        int board[][] = new int[9][9];
        int dd = 20;
        int ee = 0;
        int ff = 0;
        int gg = 0;
        int hh = 0;
        int ii = 0;
        int jj = 0;
        
        //This huge chunk of code generates a random sudoku board with all values filled in.
        
         for (int aa = 0; aa < 9; aa++){
             for (int bb = 0; bb < 9; bb++){
                 dd++;
                 board[aa][bb] = dd;
             }
         }
        for (int aa = 0; aa < 9; aa++){
             for (int bb = 0; bb < 9; bb++){
        Random rn = new Random();
int i = rn.nextInt(9) + 1;
board[aa][bb] = i;
for (int cc = 0; cc < 9; cc++){
    if(board[aa][bb] == board[aa][cc] && bb!=cc){ 
        dd++;
        ee++;
        board[aa][bb] = dd;
        if(ee > 250){
            bb = bb - 2;
        if(bb < 1){
            aa--;
        bb = 8;
        } 
        }else{
           bb--; 
        }
        cc = 10;
    }else{
         if(board[aa][bb] == board[cc][bb] && aa!=cc){
              dd++;
              ee++;
        board[aa][bb] = dd;
        if(ee > 250){
            bb = bb - 2;
        if(bb < 1){
            aa--;
        bb = 8;
        } 
        }else{
           bb--; 
        }
        cc = 10;
         }else{
             for(ff = aa; ff > -1; ff--){
                 if(ff%3 == 0){
                     ii = ff;
                     ff = -2;
                 }
             }
             for(ff = bb; ff > -1; ff--){
                 if(ff%3 == 0){
                     jj = ff;
                     ff = -2;
                 }
             }
              for (gg = ii; gg < ii+3; gg++){
             for (hh = jj; hh < jj+3; hh++){
                 if (board[aa][bb] == board[gg][hh] && aa != gg && bb != hh){
                       dd++;
              ee++;
        board[aa][bb] = dd;
        if(ee > 250){
            bb = bb - 2;
        if(bb < 1){
            aa--;
        bb = 8;
        } 
        }else{
           bb--; 
        }
        cc = 10;
        gg = 100;
            hh = 100;
                 }else{
                     if(cc == 8){
board[aa][bb] = i;
ee = 0;
gg = 100;
            hh = 100;
        }
                 }
             }
             }
    }
    }
}
        }
        }
        
        
        
// This makes a random amount of blank spaces for the user to solve the Sudoku.
        
     Random rn = new Random();
int i = rn.nextInt(7) + 42;
       for (int cc = 0; cc < i; cc++){
int aa = rn.nextInt(9);
int bb = rn.nextInt(9);
if(board[aa][bb] != 0){
board[aa][bb] = 0;
}else{
    cc--;
}
         }

       
       
       
       
        //After the board is created this for loop prints out the sudoku board that was created.
         for (int aa = 0; aa < 9; aa++){
             for (int bb = 0; bb < 9; bb++){
                 if(board[aa][bb] == 0)
                     System.out.print("-");
                     else
           System.out.print(board[aa][bb]);
           if(bb == 8)
               System.out.println();
             }
         }

         
    }
    
    
}