package com.group14.irecycle.model;


import java.sql.Date;
import java.time.LocalDate;
import java.util.List;

import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToMany;
import javax.persistence.Table;

import com.fasterxml.jackson.annotation.JsonIgnoreProperties;


@Entity
@Table(name = "users")
public class User {
	@Id
	@GeneratedValue(strategy=GenerationType.AUTO)
	private long id;

	@Column(nullable = false, unique = true)
	private String email;

	@Column(nullable = false)
	private String password;

	@Column(nullable = false)
	private String firstName;

	@Column(nullable = false)
	private String surname;

	@Column(nullable = false, unique = true, length = 11)
	private String phoneNo;

	@Column(nullable = false)
	private Date birthDate;
	
	@Column(nullable = false)
	private String address;
	
	@Column(nullable = false)
    private String role;
	
	@OneToMany(cascade = CascadeType.ALL, mappedBy = "user")
	@JsonIgnoreProperties({"hibernateLazyInitializer", "handler"}) 
	private List<Listing> listings;

	public User() {}

	public User(String email, String password, String firstName, String surname, String phoneNo, LocalDate birthDate, String address, String role) {
		super();
		this.email = email;
		this.password = password;
		this.firstName = firstName;
		this.surname = surname;
		this.phoneNo = phoneNo;
		this.birthDate = Date.valueOf(birthDate);
		this.address = address;
		this.role = role;
	}

	//autogenerated getters and setters
	public long getId() {
		return id;
	}

	public void setId(long id) {
		this.id = id;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	public String getPassword() {
		return password;
	}

	public void setPassword(String password) {
		this.password = password;
	}

	public String getFirstName() {
		return firstName;
	}

	public void setFirstName(String firstName) {
		this.firstName = firstName;
	}

	public String getSurname() {
		return surname;
	}

	public void setSurname(String surname) {
		this.surname = surname;
	}

	public String getPhoneNo() {
		return phoneNo;
	}

	public void setPhoneNo(String phoneNo) {
		this.phoneNo = phoneNo;
	}

	public Date getBirthDate() {
		return birthDate;
	}

	public void setBirthDate(LocalDate birthDate) {
		this.birthDate = Date.valueOf(birthDate);
	}
	
	public void setBirthDate(String birthDate) {
		this.birthDate = Date.valueOf(birthDate);
	}

	public String getRole() {
		return role;
	}

	public void setRole(String role) {
		this.role = role;
	}

	public List<Listing> getListings() {
		return listings;
	}

	public void setListings(List<Listing> listings) {
		this.listings = listings;
	}

	public String getAddress() {
		return address;
	}

	public void setAddress(String address) {
		this.address = address;
	}
}
