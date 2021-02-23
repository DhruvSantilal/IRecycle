package com.group14.irecycle.security;

import java.util.Arrays;
import java.util.Collection;
import java.util.List;

import org.springframework.security.core.GrantedAuthority;
import org.springframework.security.core.authority.SimpleGrantedAuthority;
import org.springframework.security.core.userdetails.UserDetails;

import com.group14.irecycle.model.User;

public class UserDetailsImpl implements UserDetails {
	
	private String username;
	private String password;
	private boolean admin;
	
	public UserDetailsImpl() {};
	
	public UserDetailsImpl(User user) {
		this.username = user.getUsername();
		this.password = user.getPassword();
		this.admin = user.isAdmin();
	}
	
	
	// returns values from user table
	@Override
	public Collection<? extends GrantedAuthority> getAuthorities() {
		if(admin == true) {
			return Arrays.asList(new SimpleGrantedAuthority("ROLE_ADMIN"));
		} else {
			return Arrays.asList(new SimpleGrantedAuthority("ROLE_USER"));
		}
	}

	@Override
	public String getPassword() {
		return password;
	}

	@Override
	public String getUsername() {
		return username;
	}

	// hardcoded to true
	@Override
	public boolean isAccountNonExpired() {
		return true;
	}

	@Override
	public boolean isAccountNonLocked() {
		return true;
	}

	@Override
	public boolean isCredentialsNonExpired() {
		return true;
	}

	@Override
	public boolean isEnabled() {
		return true;
	}
	
}
