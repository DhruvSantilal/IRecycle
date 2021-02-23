package com.group14.irecycle.security;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Configuration;
import org.springframework.security.config.annotation.authentication.builders.AuthenticationManagerBuilder;
import org.springframework.security.config.annotation.web.builders.HttpSecurity;
import org.springframework.security.config.annotation.web.configuration.EnableWebSecurity;
import org.springframework.security.config.annotation.web.configuration.WebSecurityConfigurerAdapter;
import org.springframework.security.core.userdetails.UserDetailsService;

@Configuration
@EnableWebSecurity
public class SecurityConfig extends WebSecurityConfigurerAdapter {

	@Override
	protected void configure(AuthenticationManagerBuilder auth) throws Exception {
		auth.userDetailsService(userDetailsService);
	}
	
	
	@Override
	public void configure(HttpSecurity http) throws Exception {
		http.authorizeRequests()
			.antMatchers("/").permitAll()
			.antMatchers("/users").authenticated()
			.antMatchers("/listings").permitAll()
			.and().formLogin();
	}



	@Autowired
	UserDetailsService userDetailsService;
	
	//	// Uses database for user details
	//	// Encrypts passwords using BCrypt
	//	@Autowired
	//	public void configureGlobal(AuthenticationManagerBuilder auth) throws Exception {
	//		auth.userDetailsService(userDetailsService).passwordEncoder(new BCryptPasswordEncoder());
	//	}
}
