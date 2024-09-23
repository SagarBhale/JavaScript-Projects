package onlineexam;
import javax.swing.*;
import java.awt.*;
import java.util.*;
import java.awt.event.*;
import java.sql.*;


public class Update extends JFrame implements ActionListener{
        JTextField tfusername,tfpassword;
        JLabel heading,lblusername,lblPassword;
        JButton add,back;
        
    Update()
    {
        
        getContentPane().setBackground(Color.WHITE);
        setLayout(null);
        
        
          heading=new JLabel("UPDATE  DETAIL");
        heading.setBounds(290,30,500,50);
        heading.setFont(new Font("serif",Font.BOLD,25));
        heading.setForeground(Color.red);
        add(heading);
        
        
        
         lblusername =new JLabel("USERNAME");
        lblusername.setBounds(50,150,150,30);
         lblusername.setFont(new Font("Viner Hand ITC", Font.BOLD, 15));
        add(lblusername);

        tfusername=new JTextField();
        tfusername.setBounds(200,150,200,20);
        add(tfusername);



         lblPassword=new JLabel("PASSWORD");
        lblPassword.setBounds(50,200,150,30);
        lblPassword.setFont(new Font("Viner Hand ITC", Font.BOLD, 15));
        add(lblPassword);

         tfpassword=new JTextField();
        tfpassword.setBounds(200,200,200,20);
        add(tfpassword);
        
          try {
            Conn c = new Conn();
            String query = "select * from login";
            ResultSet rs = c.s.executeQuery(query);
            while(rs.next()) {
                tfusername.setText(rs.getString("username"));
                tfpassword.setText(rs.getString("password"));
     
                
            }
        } catch (Exception e) {
            e.printStackTrace();
        }
        
        
        
        
         add = new JButton("Update Details");
        add.setBounds(80, 300, 130, 30);
        add.addActionListener(this);
        add.setBackground(Color.BLACK);
        add.setForeground(Color.WHITE);
        add(add);
        
        back = new JButton("Back");
        back.setBounds(430, 300, 130, 30);
        back.addActionListener(this);
        back.setBackground(Color.BLACK);
        back.setForeground(Color.WHITE);
        add(back);
        
         setSize(1100,500);
        setLocation(400, 200);
        setVisible(true);

        
        
    }
    
    
     public  void actionPerformed(ActionEvent ae)
    {
       if(ae.getSource()==add)
       {
           String username = tfusername.getText();
            String password = tfpassword.getText();
            
           try
           {
               Conn conn=new Conn();
                String query = "update login set username= '"+username+"',password= '"+password+"'";
                conn.s.executeUpdate(query);
                JOptionPane.showMessageDialog(null, "DETAILED UPDATE SUCCESSFULLY");
                setVisible(false);
                new Rules("");
//                new Home();
                
           }
            catch(Exception e)
                    {
                        e.printStackTrace();
                    }
       }
       else 
       {
           setVisible(false);
          new LoginPage();
       }
   
    }
  public static void main(String args[])
      {
          
        new Update();
       }


}