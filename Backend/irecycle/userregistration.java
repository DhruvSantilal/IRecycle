package userregistration;
import java.awt.Color;
import java.awt.EventQueue;
import java.awt.Font;
import java.awt.Toolkit;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Statement;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JPasswordField;
import javax.swing.JTextField;
import javax.swing.SwingConstants;
import javax.swing.border.EmptyBorder;

public class userregistration extends JFrame {
	private static final long serialVersionUID = 1L;
	private JPanel contentPane;
	private JTextField firstname;
	private JTextField lastname;
	private JTextField email;
	private JTextField username;
	private JTextField mob;
	private JPasswordField passwordField;
	private JButton btnNewButton;
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					userregistration frame = new userregistration();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	public userregistration() {
		setIconImage(Toolkit.getDefaultToolkit().getImage("C:\\Users\\User\\Desktop\\STDM.jpg"));
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(700, 190, 1050, 700);
		setResizable(false);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
		contentPane.setLayout(null);

		JLabel lblNewUserRegister = new JLabel("USER REGISTRATION");
		lblNewUserRegister.setFont(new Font("Apple Casual", Font.BOLD, 28));
		lblNewUserRegister.setBounds(362, 52, 325, 50);
		getContentPane().setBackground(Color.WHITE);
		contentPane.add(lblNewUserRegister);

		JLabel lblName = new JLabel("FIRST NAME:");
		lblName.setFont(new Font("Apple Casual", Font.BOLD, 15));
		lblName.setBounds(58, 152, 99, 43);
		contentPane.add(lblName);

		JLabel lblNewLabel = new JLabel("LAST NAME:");
		lblNewLabel.setFont(new Font("Apple Casual", Font.BOLD, 15));
		lblNewLabel.setBounds(58, 243, 110, 29);
		contentPane.add(lblNewLabel);
		
		JLabel lblUsername = new JLabel("USERNAME:");
		lblUsername.setFont(new Font("Apple Casual", Font.BOLD, 15));
		lblUsername.setBounds(542, 159, 99, 29);
		contentPane.add(lblUsername);

		JLabel lblEmailAddress = new JLabel("EMAIL:");
		lblEmailAddress.setFont(new Font("Apple Casual", Font.BOLD, 15));
		lblEmailAddress.setBounds(58, 324, 124, 36);
		contentPane.add(lblEmailAddress);
		
		JLabel lblPassword = new JLabel("PASSWORD:");
		lblPassword.setFont(new Font("Apple Casual", Font.BOLD, 15));
		lblPassword.setBounds(542, 245, 99, 24);
		contentPane.add(lblPassword);

		JLabel lblMobileNumber = new JLabel("MOBILE NUMBER:");
		lblMobileNumber.setFont(new Font("Apple Casual", Font.BOLD, 15));
		lblMobileNumber.setBounds(542, 329, 139, 26);
		contentPane.add(lblMobileNumber);

		firstname = new JTextField();
		firstname.setFont(new Font("Apple Casual", Font.BOLD, 15));
		firstname.setBounds(214, 151, 228, 50);
		contentPane.add(firstname);
		firstname.setColumns(10);

		lastname = new JTextField();
		lastname.setFont(new Font("Apple Casual", Font.BOLD, 15));
		lastname.setBounds(214, 235, 228, 50);
		contentPane.add(lastname);
		lastname.setColumns(10);

		email = new JTextField();
		email.setFont(new Font("Apple Casual", Font.BOLD, 15));
		email.setBounds(214, 320, 228, 50);
		contentPane.add(email);
		email.setColumns(10);

		username = new JTextField();
		username.setFont(new Font("Apple Casual", Font.BOLD, 15));
		username.setBounds(707, 151, 228, 50);
		contentPane.add(username);
		username.setColumns(10);

		mob = new JTextField();
		mob.setFont(new Font("Apple Casual", Font.BOLD, 15));
		mob.setBounds(707, 320, 228, 50);
		contentPane.add(mob);
		mob.setColumns(10);

		passwordField = new JPasswordField();
		passwordField.setFont(new Font("Apple Casual", Font.BOLD, 15));
		passwordField.setBounds(707, 235, 228, 50);
		contentPane.add(passwordField);

		btnNewButton = new JButton("REGISTER");
		btnNewButton.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				String firstName = firstname.getText();
				String lastName = lastname.getText();
				String emailId = email.getText();
				String userName = username.getText();
				String mobileNumber = mob.getText();
				int len = mobileNumber.length();
				String password = passwordField.getText();
				int pass = password.length();
				String name = "" + firstName;
				name += " \n";
				
				
				if (len != 10) {
					JOptionPane.showMessageDialog(btnNewButton, "Enter a valid mobile number");
					btnNewButton.setFont(new Font("Apple Casual", Font.BOLD, 22));
					btnNewButton.setHorizontalAlignment(SwingConstants.CENTER);
				
	

				}
				if (pass < 6) {
					JOptionPane.showMessageDialog(btnNewButton, "Minimum 6 Character For Password Is Required");
					btnNewButton.setFont(new Font("Apple Casual", Font.BOLD, 22));
					btnNewButton.setHorizontalAlignment(SwingConstants.CENTER);
				}
				try {
					Connection connection = DriverManager.getConnection("jdbc:mysql://localhost:3306/registration", "root", "root");

					String query = "INSERT INTO account values('" + firstName + "','" + lastName + "','" + userName + "','" +
							password + "','" + emailId + "','" + mobileNumber + "')";

					Statement sta = connection.createStatement();
					int x = sta.executeUpdate(query);
					if (x == 0) {
						JOptionPane.showMessageDialog(btnNewButton, "ACCOUNT EXISTS, PLEASE LOGIN");
					} else {
						JOptionPane.showMessageDialog(btnNewButton,
								"Welcome, " + name + "Your account is successfully created");
					}
					connection.close();
				} catch (Exception exception) {
					exception.printStackTrace();
				}
			}
		});
		btnNewButton.setFont(new Font("Apple Casual", Font.BOLD, 22));
		btnNewButton.setBounds(399, 447, 259, 74);
		contentPane.add(btnNewButton);
	}
}

