import javax.swing.*;
public class conversion{
public static void main (String[] args){
        JFrame frame = new JFrame ("Avi is awesome");
        frame.setVisible(true);
        JScrollPane scroll = new JScrollPane();
        JTextArea text = new JTextArea("");
        frame.add(scroll);
        scroll.getViewport().add(text);
        int counter = 1;
        frame.setSize(1380, 735);
        int i = 0;
        char [] chars = {' ', '!', '"', '#', '$', '%', '&', ' ', '(', ')', '*', '+', ',', '-', '.', '/', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', ':', ';', '<', '=', '>', '?', '@', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '[', ' ', ']', '^', '_', '`', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '{', '|', '}'};
        String word = JOptionPane.showInputDialog("Type something and watch it become binary code 00100001");
for (int tt = 0; tt < word.length(); tt++){
        int spot = 0;
        for(i = 0; i < chars.length + 1; i++) {
                if (i < chars.length){
                char temp = word.charAt(tt);
                if (temp == chars[i]) {
                        spot = i + 32;
                        i = chars.length +2;
                }
        }
        }
        if (i != chars.length + 1){
        String finals = converter.binary(spot);
        if (counter%24 == 0) {
        text.setText(text.getText() + (finals) + "\n");
        }
        else {
                text.setText(text.getText() + (finals));
        }
        counter ++;

}
}
System.out.println();
}
}
