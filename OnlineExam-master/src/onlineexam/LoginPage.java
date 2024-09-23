/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package onlineexam;

/**
 *
 * @author SHIVANI
 */
import java.awt.Color;
import java.awt.*;
import javax.swing.*;
import java.awt.event.*;
import java.sql.*;
import java.sql.Connection;
/**
 *
 * @author SHIVANI
 */
public class LoginPage extends JFrame implements ActionListener {

    
    JTextField tfusername,tfpassword;
    JButton rules,back,update;
    LoginPage()
    {

        
        getContentPane().setBackground(Color.WHITE);
        setLayout(null);


        ImageIcon i1 = new ImageIcon(ClassLoader.getSystemResource("Icons/Homee.jpg"));
        Image i2=i1.getImage().getScaledInstance(600, 550,Image.SCALE_DEFAULT);
        ImageIcon i3=new ImageIcon(i2);
        JLabel image = new JLabel(i3);
         image.setBounds(0,0,600,500);
        add(image);


        JLabel heading = new JLabel("Simple Minds");
        heading.setBounds(750, 60, 300, 45);
        heading.setFont(new Font("Viner Hand ITC", Font.BOLD, 40));
//        heading.setForeground(new Color(30,144,254));
        add(heading);
        
//        
  JLabel lblusername =new JLabel("USERNAME");
        lblusername.setBounds(700,150,350,20);
         lblusername.setFont(new Font("Viner Hand ITC", Font.BOLD, 15));
        add(lblusername);

        tfusername=new JTextField();
        tfusername.setBounds(810,150,200,20);
        add(tfusername);



        JLabel lblPassword=new JLabel("PASSWORD");
        lblPassword.setBounds(700,200,350,20);
         lblPassword.setFont(new Font("Viner Hand ITC", Font.BOLD, 15));
        add(lblPassword);

         tfpassword=new JTextField();
        tfpassword.setBounds(810,200,200,20);
        add(tfpassword);
        
        
        rules = new JButton("LOGIN");
        rules.setBounds(820, 270, 80, 25);
        rules.setBackground(Color.BLACK);
        rules.setForeground(Color.WHITE);
        rules.addActionListener(this);
        add(rules);
        
      
        setSize(1100,500);
        setLocation(400, 200);
        setVisible(true);

    }
    
      public void actionPerformed(ActionEvent ae)
              
      {
        try{
            String username=tfusername.getText();
            String password=tfpassword.getText();
            Conn c=new Conn();
            String query="select * from login where username= '"+username+"' and password='"+password+"' ";
            
            ResultSet rs = c.s.executeQuery(query);
            
           if(rs.next()==true)
            {
                setVisible(false);
              new Rules(username);
            }
           else 
            {
                JOptionPane.showMessageDialog(null, "invalid username or password");
                setVisible(false);
              new LoginPage();
            }
           
        }
        catch(Exception e)
                    {
                        e.printStackTrace();
                    }   
      }
    public static void main(String[] args) {
        new LoginPage();
    }
    
}


