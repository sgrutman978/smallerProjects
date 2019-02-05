/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package tic;

import java.util.ArrayList;

/**
 *
 * @author kidWithaApps
 */
public class caesar {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        char[] cat = {'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'};
   ArrayList def = new ArrayList();
   for(int yy = 0; yy < cat.length; yy++){
       def.add(cat[yy]);
   }
        String pizza = "Avi is cray cray and he is too fast at writing code";
    String newPizza = "";
    for(int ii = 0; ii < pizza.length(); ii++){
       newPizza = newPizza + def.get((def.indexOf(pizza.charAt(ii)) + 5)%26);
    }
    System.out.print(newPizza);
    }
}
