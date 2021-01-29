package com.group14.irecycle.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.core.authority.AuthorityUtils;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.security.core.userdetails.UserDetailsService;
import org.springframework.security.core.userdetails.UsernameNotFoundException;
import org.springframework.stereotype.Service;

import com.group14.irecycle.model.User;
import com.group14.irecycle.repository.UserRepository;

@Service
public class UserDetailServiceImpl implements UserDetailsService {
	@Autowired
	private UserRepository userRepository;
	
	@Override
	public UserDetails loadUserByUsername(String email) throws UsernameNotFoundException {
		User currentUser = userRepository.findByEmail(email);
        UserDetails user = new org.springframework.security.core
            .userdetails.User(email, currentUser.getPassword()
            , true, true, true, true, 
            AuthorityUtils.createAuthorityList(currentUser.getRole()));
        return user;
	}	

}
